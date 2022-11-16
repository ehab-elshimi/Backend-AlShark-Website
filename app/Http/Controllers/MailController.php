<!-- <?php
namespace App\Http\Controllers;

use App\Models\Emails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class EmailController extends Controller
{
    public $email;
    public function sendemail(Request $request)
    {
        /**
         * Store a receiver email address to a variable.
         */

        $request->validate([
            'first_name'=>"required",
            'last_name'=>"required",
            'company_name'=>"required",
            'phone_number'=>"required",
            'email' => "required|email",
            'message' => "required"
          ]);
          Emails::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'company_name'=>$request->company_name,
            'phone_number'=>$request->phone_number,
            'email' =>$request->email,
            'message'=>$request->message
          ]);
          $this->email = $request->all();
          $reveiverEmailAddress = "ehab.kamalshimi90@gmail.com";
        Mail::to($reveiverEmailAddress)->send(new TestEmail($this->email));



        if (Mail::failures() != 0) {
            return "Email has been sent successfully.";
        }
        return "Oops! There was some error sending the email.";
    }

} -->
