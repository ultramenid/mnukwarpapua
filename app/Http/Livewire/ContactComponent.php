<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name, $email, $subject, $deskripsi, $recaptcha;

    public function storeInbox(){
        $attribute = $this->validate([
            'name' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'deskripsi' => ['required'],
            'recaptcha' => ['required','captcha'],
        ]);

        DB::table('inbox')->insert([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'deskripsi' => $this->deskripsi,
            'created_at' => Carbon::now('Asia/Jakarta')
        ]);
        redirect()->to('/contact')->with('message', 'Terima kasih pesan sudah kami terima.');;
    }


    public function render()
    {
        return view('livewire.contact-component');
    }
}
