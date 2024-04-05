<?php

namespace App\Vendors;

use Illuminate\Support\Collection;

interface VendorInterface
{
    public function variants(): Collection;
}
