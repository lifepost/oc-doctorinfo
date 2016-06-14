<?php namespace Teb\Doctorinfo\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use Illuminate\Support\Facades\DB;

class DoctorInfo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => '주치의 소개',
            'description' => '주치의 소개 플러그인입니다.'
        ];
    }

    public function defineProperties()
    {
        return [
            'max' => [
                'description'       => 'The most amount of menu items allowed',
                'title'             => 'Max items',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items value is required and should be integer.'
            ]
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/teb/doctorinfo/assets/css/doctorinfo.css');
        $this->addJs('/plugins/teb/doctorinfo/assets/js/doctorinfo.js');
    }

    public function getDoctors()
    {
        $doctors = DB::table('teb_doctorinfo_doctors')->where('is_active', 1)->orderBy('order_no')->get();
        return $doctors;
    }

    public function getDoctorInfo()
    {
        $doctor_id = $this->property('doctor_id');
        $doctor = DB::table('teb_doctorinfo_doctors')->where('id', $doctor_id)->first();
        return $doctor;
    }
}
