```php
<?php

namespace Jeffreyvr\SimpleMedia;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasMedia
{
    public function mediaByGroup($group): BelongsToMany
    {
        return $this->media()->where('media.group', $group);
    }

    // ...
}
