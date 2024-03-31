```php
class Article extends Block
{
    public $data = [
        'content' => 'This is just an example block.'
    ];

    public $blockEditComponent = 'article';

    public function render()
    {
        return <<<'blade'
            <div>{{ $content }}</div>
        blade;
    }
}
```
