# Value casting

> Available with version 1.6.0 (imminent)

Sometimes a value you submit to an external API, needs to be of a specific type. By casting this value, you can make sure it is.

The following casts are available:

- [boolean](#boolean)
- [integer](#integer)
- [float](#float)
- [array](#array)

![](/images/docs/gf-send-to-api/v1/value-casting.png)

## Boolean

The value needs to be send as a boolean (either `true` or `false`). You may cast it like so:

```
(gfsta_cast type="boolean") {Consent (Text):8.2}
```

In the above example, the value is the outcome of the merge tag.

## Integer

This will make sure the value is an integer, a whole number. The below example would result in the value being `1`.

```
(gfsta_cast type="integer") 1.2
```

## Float

This will make sure the value is a floating point number. The below example would result in the value being `1.0`.

```
(gfsta_cast type="float") 1
```

## Array

This will transform a value into an array.

```
(gfsta_cast type="array") {Multiple:7}
```

In the above example, the value is the outcome of the merge tag - a dropdown with multiple values select. This will transform the string value `Test 1, Test 2` into an array: `['Test 1', 'Test 2']`.

By default, the delimiter is `, `. You can set a specific delimiter like so:

```
(gfsta_cast type="array" delimiter=",") Foo,Bar

```
