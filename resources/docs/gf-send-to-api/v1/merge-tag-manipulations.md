# Merge tag manipulations

You can manipulate merge tag values before you send them to your API.

Need to uppercase a something? Simply: `{gfsta_manipulation value="{FirstName:3}" uppercase}`

Say you need to send an image of a signature as base64 encoded string. The [Gravity Forms Signature add-on](https://www.gravityforms.com/add-ons/signature/) will allow you to add the signature field, but only provides a URL of the image afterwards.

Now, in the body, you can add a merge tag that base64 encodes this image like so:

```
{gfsta_manipulation value="{Signature:3}" base64_encode="url"}
```

These manipulations will also work on merge tags created from the API response. If you want, for example, to only get the last name of a full name value:

```
{gfsta_full_name split_get="1| "}
```

Or get the longitude of a value that holds the lat/long values comma seperated:

```
{gfsta_coordinates split_get="last|,"}
```

The full list of manipulations:

| Manipulation | Description | Example |
| --- | --- | --- |
| uppercase | Uppercase a value | `{gfsta_first_name uppercase}` |
| lowercase | Lowercase a value | `{gfsta_first_name lowercase}` |
| date_format | Format a date value | `{gfsta_created_at date_format="Y-m-d"}` |
| split_get | Split and then get a value | `{gfsta_coordinates split_get="0\|,"}`  where 0 is the index and , the seperator. As index, you can also pass `first` or `last` |
| base64_encode | Base64 encode a value | `{gfsta_image base64_encode}` or for a URL input `{gfsta_image base64_encode="url"}`|
| manipulation | You can use this to manipulate other merge tag values. You need to set the value first. | `{gfsta_manipulate value="{FirstName:3}" uppercase}` |
