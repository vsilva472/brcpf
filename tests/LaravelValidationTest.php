<?php

namespace Tests;

use Illuminate\Support\Facades\Validator;
use Vsilva472\BrCpf\Rules\Cpf;

class LaravelValidationTest extends TestCase
{
    public function test_valid_masked_cpf_passes()
    {
        $validator = $this->validateCpf('401.766.550-00');

        $this->assertFalse($validator->fails());
    }

    public function test_valid_plain_cpf_passes()
    {
        $validator = $this->validateCpf('40176655000');

        $this->assertFalse($validator->fails());
    }

    public function test_invalid_masked_cpf_fails()
    {
        $validator = $this->validateCpf('000.000.000-00');

        $this->assertTrue($validator->fails());
    }

    public function test_invalid_plain_cpf_fails()
    {
        $validator = $this->validateCpf('00000000000');

        $this->assertTrue($validator->fails());
    }

    public function test_invalid_non_cpf_fails()
    {
        $validator = $this->validateCpf('ABC');

        $this->assertTrue($validator->fails());
    }

    public function test_incomplete_masked_cpf_fails()
    {
        $validator = $this->validateCpf('401.766.5');

        $this->assertTrue($validator->fails());
    }

    public function test_incomplete_plain_cpf_fails()
    {
        $validator = $this->validateCpf('4017665');

        $this->assertTrue($validator->fails());
    }

    public function test_nullable_allows_null()
    {
        $validator = $this->validateCpf(null, ['nullable']);

        $this->assertFalse($validator->fails());
    }

    public function test_nullable_with_valid_cpf_passes()
    {
        $validator = $this->validateCpf('401.766.550-00', ['nullable']);

        $this->assertFalse($validator->fails());
    }

    public function test_nullable_with_valid_plain_cpf_passes()
    {
        $validator = $this->validateCpf('40176655000', ['nullable']);

        $this->assertFalse($validator->fails());
    }

    public function test_nullable_with_invalid_cpf_fails()
    {
        $validator = $this->validateCpf('00000000000', ['nullable']);

        $this->assertTrue($validator->fails());
    }

    public function test_nullable_with_empty_string_passes()
    {
        $validator = $this->validateCpf('', ['nullable']);

        $this->assertFalse($validator->fails());
    }

    private function validateCpf($cpf, array $rules = [])
    {
        return Validator::make(
            ['cpf' => $cpf],
            ['cpf' => [...$rules, new Cpf()]]
        );
    }
}
