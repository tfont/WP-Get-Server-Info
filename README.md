# WP-Get-Server-Info
A simple WordPress Shortcode to retrieve server methods information: Get, Post, or Server. Retrieves $_SEVER, $_POST, or $_GET.

*Rquires PHP 5.6+*

---

Drop 'shortcode-get-server-info' folder into your WordPress Plugin folder!

*Also, don't forget to activate the plugin labelled as 'Shortcode - Gets Server Info (get, post, server)' and it's good to go!*

## How To Use

Will display GET values with "print_r"

```
[get-server-info=get type=print_r]
```

Will display POST values with "&lt;pre&gt;" HTML element wrapped around "print_r"

```
[get-server-info=post type=pre_print_r]
```

Will display SERVER values with "var_dump"

```
[get-server-info=server type=var_dump]
```

Will use the default value which is "print_r" and display GET values

```
[get-server-info=get]
```
