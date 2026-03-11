<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PullData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pull-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //      $this->info("Initializing ...");

        //    $test = false;

        //    $ip_address = [
        //     // "192.168.5.159",
        //     // "192.168.5.183",
        //     // "192.168.5.184",
        //     "192.168.5.185",
        //     // "192.168.5.160",
        //     // "192.168.5.161",
        //     // "192.168.5.162",
        //    // "192.168.5.158"
        //    ];
        //   $devices = Devices::where("is_active",1)
        //   ->whereIn("ip_address",$ip_address)
        // //  ->whereNotIn("ip_address",$ip_address)
        //   ->get();

        //   $summary = [];

        //   foreach ($devices as $device) {
        //     $this->warn("Connecting to  $device->ip_address");
        //     if ($tad = $this->device->bIO($device)) {
        //         $this->info("Connection successful -------- $device->ip_address");

        //         ////////////////////////////////////////////////////////////
        //         if($test){
        //           continue;
        //         }

        //    // $biometrics = Biometrics::all();
        //        $biometrics = Biometrics::whereIn("biometric_id",[8026])->get();
        //        foreach ($biometrics as $key => $emp) {
        //         $user_temp = $tad->get_user_template(['pin' => $emp->biometric_id]);
        //         $utemp = simplexml_load_string($user_temp);


        //         $info = $utemp !== false && isset($utemp->Row->Information)
        //         ? trim((string) $utemp->Row->Information)
        //         : null;

        //         if (!isset($summary[$device->ip_address])) {
        //           $summary[$device->ip_address] = [
        //               'processed_count' => 0,
        //               'unprocessed_count' => 0, 
        //           ];
        //       }



        //         if ($info !== "No data!") {
        //             $BIO_User = [];
        //             foreach ($utemp->Row as $user_Cred) {
        //                 $result = [
        //                     'Finger_ID' => (string) $user_Cred->FingerID,
        //                     'Size'  => (string) $user_Cred->Size,
        //                     'Valid' => (string) $user_Cred->Valid,
        //                     'Template' => (string) $user_Cred->Template,
        //                 ];
        //                 $BIO_User[] = $result;
        //             }
        //            //UPDATE THE USER TEMPLATES
        //            /**
        //             * This will handle any additionals or update user biometric template.
        //             */
        //             if($emp->biometric !== "NOT_YET_REGISTERED"){
        //              $biometric_Data = json_decode($emp->biometric, true); 
        //             if (!empty($BIO_User)) {
        //                 $merged = array_merge($biometric_Data ?? [], $BIO_User);
        //                 $biometric_Data = collect(array_values(array_reduce($merged, function ($carry, $item) {
        //                     $carry[$item['Finger_ID']] = $item; 
        //                     return $carry;
        //                 }, [])));
        //             }
        //             $biometric_Data = json_decode(json_encode($biometric_Data));
        //             }else {
        //               $biometric_Data = $BIO_User;
        //             }


        //                if( $emp->update([
        //                 'biometric' =>  json_encode($biometric_Data)
        //                   ])){
        //                     $biometricsCount = count($biometrics);
        //                     $currentKey = $key + 1;
        //                     $this->line("$device->ip_address  - $currentKey - $biometricsCount -  Pulled -> {$emp->biometric_id} {$emp->name}  ✔");
        //                     $summary[$device->ip_address]['processed_count']++;
        //                   }

        //         }else {
        //             $this->error("$device->ip_address Unprocessed -> {$emp->biometric_id} {$emp->name} ");
        //             $summary[$device->ip_address]['unprocessed_count']++;
        //           }
        //        }

        //       ///////////////////////////////////////////////////////////
        //     }else {
        //         $this->error("Connection failed --- $device->ip_address");
        //     }

        //     $this->info("End of process for --- $device->ip_address ");
        //   }

        //   $this->info("======= SUMMARY =======");
        //   foreach ($summary as $ip => $data) {
        //       $this->line("$ip -> Processed: {$data['processed_count']}, Unprocessed: {$data['unprocessed_count']}");
        //   }
    }
}
