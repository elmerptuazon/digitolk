<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'from_language_id' => 'required|string|',
            'immediate' => 'required|in:YES,NO',
            'due_date' => 'exclude_if:immediate,YES|string|',
            'due_time' => 'exclude_if:immediate,YES|string|',
            'customer_phone_type' => 'exclude_if:immediate,YES|in:YES,NO|',
            'customer_physical_type' => 'nullable|in:YES,NO|',
            'duration' => 'nullable|string|',
            'job_for' => 'nullable|in:male,female,normal,certified,certified_in_law,certified_in_helth|',
            'job_type' => 'nullable|in:rws,ngo,unpaid,paid|',
            'by_admin' => 'nullable|in:YES,NO|',
            'gender' => 'exclude_unless:job_for,true|in:male,female',
            'certified' => 'exclude_unless:job_for,true|in:yes,law,health,both,n_law,n_health'
        ];
    }

    public function messages()
    {
        $response = function ($status, $message, $field_name) {
            return json_encode([
                'status' => $status,
                'message' => $message,
                'field_name' => $field_name
            ]);
        };
        return [
            'from_language_id.exists' => $response('fail', "Du måste fylla in alla fält", "from_language_id"),
            'due_date.exists' => $response('fail', 'Du måste fylla in alla fält', 'due_date'),
            'due_time.exists' => $response('fail', 'Du måste fylla in alla fält', 'due_time'),
            'customer_phone_type.exists' => $response('fail', 'Du måste göra ett val här', 'customer_phone_type'),
            'duration.exists' => $response('fail', 'Du måste fylla in alla fält', 'duration')
        ];
    }
}
