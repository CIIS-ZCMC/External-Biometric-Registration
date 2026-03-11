<?php

namespace App\Console\Commands;

use App\Models\Devices;
use Illuminate\Console\Command;

class PushData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $device;
    protected $signature = 'app:push-data {device_id} {data}';

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
        $this->info("Initializing process ...");

        $test = false;

        $deviceID = $this->argument('device_id');
        $data = json_decode($this->argument('data'), true);


        $device = Devices::where("id", $deviceID)->first();


        $this->line("Device: " . $device->name);
        $this->line("Data: " . json_encode($data));

        // foreach ($devices as $device) {
        //  $this->warn("Connecting to  $device->ip_address");
        //  if ($tad = $this->device->bIO($device)) {
        //     $this->info("Connection successful -------- $device->ip_address  ");
        //     //✘✔
        //     // Logic
        //     /**
        //      * Pushing Logic .. 
        //      */
        //     ////////////////////////////////////////////////////////////////////

        // //   $biometrics = Biometrics::whereIn("biometric_id",[
        // //     "498",
        // //     "496",
        // //     "632",
        // //   ])->get();

        //         if($test){
        //             continue;
        //         }

        //     $biometrics = Biometrics::whereIn('biometric_id', ['8026'])->get();

        //      foreach ($biometrics as $key => $emp) {

        //         $user_temp = $tad->get_user_template(['pin' => $emp->biometric_id]);
        //         $utemp = simplexml_load_string($user_temp);

        //         $info = $utemp !== false && isset($utemp->Row->Information)
        //         ? trim((string) $utemp->Row->Information)
        //         : null;

        //         $BIO_User = [];
        //         if ($info !== "No data!") {
        //             foreach ($utemp->Row as $user_Cred) {
        //                 $result = [
        //                     'Finger_ID' => (string) $user_Cred->FingerID,
        //                     'Size'  => (string) $user_Cred->Size,
        //                     'Valid' => (string) $user_Cred->Valid,
        //                     'Template' => (string) $user_Cred->Template,
        //                 ];
        //                 $BIO_User[] = $result;
        //             }
        //         }

        //         $added =  $tad->set_user_info([
        //             'pin' => $emp->biometric_id,
        //             'name' => $emp->name,
        //             'privilege' => $emp->privilege ? 14 : 0
        //         ]);
        //         $biometric_Data = json_decode($emp->biometric, true); 
        //         if (!empty($BIO_User)) {
        //             $merged = array_merge($biometric_Data ?? [], $BIO_User);
        //             $biometric_Data = collect(array_values(array_reduce($merged, function ($carry, $item) {
        //                 $carry[$item['Finger_ID']] = $item; 
        //                 return $carry;
        //             }, [])));
        //         }
        //         $biometric_Data = json_decode(json_encode($biometric_Data));
        //         if ($added) {
        //             if ($biometric_Data !== null) {
        //                 foreach ($biometric_Data as $row) {
        //                     $fingerid = $row->Finger_ID;
        //                     $size = $row->Size;
        //                     $valid = $row->Valid;
        //                     $template = $row->Template;
        //                     $tad->set_user_template([
        //                         'pin' => $emp->biometric_id,
        //                         'finger_id' => $fingerid,
        //                         'size' => $size,
        //                         'valid' => $valid,
        //                         'template' => $template
        //                     ]);
        //                 }
        //                 $biometricsCount = count($biometrics);
        //                 $currentKey = $key + 1;
        //                 $this->line("$device->ip_address - $currentKey - $biometricsCount -  Saved -> {$emp->biometric_id} {$emp->name}  ✔");
        //             }
        //         }else {
        //             $this->error("$device->ip_address - $currentKey - $biometricsCount - Failed -> {$emp->biometric_id} {$emp->name} ");
        //         }
        //      }



        //  }else {
        //     $this->error("Connection failed --- $device->ip_address");
        //  }

        //  $this->info("End of process for --- $device->ip_address ");
        // }


    }
}
