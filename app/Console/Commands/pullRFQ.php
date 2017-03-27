<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class pullRFQ extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pull:RFQ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $resultsNav=DB::connection('sqlsrv')
                    ->select(DB::raw('SELECT distinct a.[No_]
                                  ,a.[Taxation Preference] as TaxationPreference
                            FROM [Bebb New].[dbo].[BEBB_India$Wish List Header] a
                            union
                            SELECT distinct a.[No_]
                                  ,a.[Taxation Preference]
                            FROM [Bebb New].[dbo].[BEBB_India$Sales Header Archive] a
                              join 
                            (SELECT [No_], max([Version No_]) as latest_Version
                                    FROM [Bebb New].[dbo].[BEBB_India$Sales Header Archive] group by [No_]) b
                            on a.No_ = b.No_
                            and a.[Version No_] = b.latest_Version
                            where a.No_ like \'W%\''));

        $taxmapping=DB::connection('sqlsrv')
                    ->select(DB::raw('select [Field value] as FieldValue,[Option Value] as OptionValue 
                            from [Bebb New].[dbo].[BEBB_India$String to Integer Mapping] 
                            where [Field Name] = \'Taxation Preference\''));

//        dd($taxmapping);
        $resultsSuite=DB::connection('mysql2')
                        ->select(DB::raw('select a.name as No_, b.customer_taxation_preference_c as TaxationPreference from aos_quotes a
                            join aos_quotes_cstm b
                            on a.id = b.id_c and a.deleted=0;'));

        foreach ($resultsNav as $result){
            if(\App\pullRFQ::where('rfq_no','=',$result->No_)->first()){

            }
            else{
                $pull=new \App\pullRFQ();
                $pull->rfq_no=$result->No_;
                $preference="";
                foreach ($taxmapping as $mapping){
                    if($mapping->FieldValue == $result->TaxationPreference){
                        $preference=$mapping->OptionValue;
                        break;
                    }
                }
                if($preference==""){
                    $pull->tax_preference=$result->TaxationPreference;
                }
                else{
                    $pull->tax_preference=$preference;
                }
                $pull->save();
            }
        }
//        dd($resultsSuite);

        foreach ($resultsSuite as $result){
            if(\App\pullRFQ::where('rfq_no','=',$result->No_)->first()){

            }
            else{
                $pull=new \App\pullRFQ();
                $pull->rfq_no=$result->No_;
                $pull->tax_preference=$result->TaxationPreference;
                $pull->save();
            }
        }

        $this->info("RFQ along with tax preference pulled successfully");
        //
    }
}
