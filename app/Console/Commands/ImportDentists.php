<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\DentalPractice;
use App\Contact;

class ImportDentists extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dentists:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Dentists and Dental Practices from CSV';

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

        $csvAccounts = public_path() . '/storage/Accounts.csv';
        $csvContacts = public_path() . '/storage/Contacts.csv';
        
        $fileCsv = fopen( $csvContacts, 'r' );
        while ( ( $line = fgetcsv($fileCsv) ) !== FALSE) {

            // dump( $line );

            if ( $line[9] === 'first_name' ) continue;


            
            $DentalPractice = DentalPractice::select()
                ->where('Name', $line[36])
                ->first();
            if ( empty( $DentalPractice ) ) continue;

            $dentalPracticeId = $DentalPractice->id;

            $newContact = [
                'Name' => $line[9] . ' ' . $line[10] ,
                'EmailAddress' => $line[35],
                'Password' => $line[40],
                'dental_practice_id' => $dentalPracticeId
            ];
            $newContact  = Contact::create($newContact);
            dump( $newContact->toArray() );
            
        }
        fclose($fileCsv);


        die( $this->description );
        // $configModule = config('module');
        // $apiEndpoint = $configModule['modules']['PriceAlert']['apiEndPoints']['getUpdatedPriceAlerts'] . date('Y-m-d', strtotime('-1 day') );
        
      
        // $request = file_get_contents($apiEndpoint);
        
        
        
        // // Deactivate Expired DealTypes and Deal Rules
        // $this->_DeactivateExpiredDealTypes();
        // $this->_DeactivateExpiredDealRules();
        
        // // Process DealType Rules
        // $dealtypes = DealsModels\DealTypes::select(['*'])
        //     ->where('Active', '1')
        //     ->where('Deleted', '0')            
        //     ->where('IsFilterDefinition', '0')
        //     ->whereRaw('( ExpiryDate >= NOW() ) OR ( ExpiryDate IS NULL )')
        //     ->get();
        
        
        // foreach( $dealtypes as $dealtype ) {

        //     /*for testin*/
        //     if (
        //         ( $dealtype->ID == 68 )
        //         || ( $dealtype->ID == 152 )
        //         || ( $dealtype->ID == 87 )
        //     ){} else { continue; }
            
        //     $repoDealProcess = new ProcessesDealTypesRepository( $dealtype );
        //     $repoDealProcess->FlagPackageDealsByDealType();
            
        //     Log::info("CRON Process DealType: " . $dealtype->ID );
        //     $this->comment("CRON Process DealType: " . $dealtype->ID );

        // }
        

        
    }
}
