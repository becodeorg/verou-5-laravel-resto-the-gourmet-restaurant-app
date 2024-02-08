<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reservationName' => 'required|string|max:255',
            'reservationEmail' => 'required|email|max:255',
            'reservationDate' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $date = Carbon::parse($value);
                    if ($date->dayOfWeek === 1 || $date->dayOfWeek === 0) {
                        $fail("We are closed on Monday or Sunday.");
                    }
                },
            ],
            'reservationTime' => 'required|in:18:00,19:30,21:00',
            'reservationTable' => 'required|exists:tables,id',
            'reservationNotes' => 'nullable|string',
        ];
    }
}
