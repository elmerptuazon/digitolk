<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class GetDistanceFeedRequest extends FormRequest
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
            'distance' => 'nullable|string|',
            'time' => 'nullable|string|',
            'jobid' => 'nullable|string|',
            'session_time' => 'nullable|string|',
            'manually_handled' => 'required|in:true,false|',
            'flagged' => 'required|in:true,false|',
            'admincomment' => 'exclude_if:flagged,false|string|required',
            'by_admin' => 'required|in:true,false|',
        ];
    }

    public function messages()
    {
        return [
            'admincomment.required' => "Please, add comment",
        ];
    }
}
