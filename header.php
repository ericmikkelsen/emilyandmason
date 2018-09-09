<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body class="<?php echo join( ' ', get_body_class( $class ) ); ?> theme--<?php the_field( 'theme_color', get_the_id() ); ?>">

    <div class="NamePlate">
        <a class="NamePlate__home" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 992 104" width="992" height="104" style="width:31rem">
                <text class="logo-fill" x="32" y="64" font-weight="bold" font-size="72" font-family="Futura, futura, 'Futura-Bol', Futura-Bol, 'Trebuchet MS', Arial, sans-serif" letter-spacing="8">
                    EMILY
                </text>
                <text class="logo-fill" x="96" y="96" font-weight="bold" font-size="20" font-family="Futura, futura, 'Futura-Bol', Futura-Bol, 'Trebuchet MS', Arial, sans-serif" letter-spacing="8">
                    HANNA
                </text>
                <text class="logo-line" x="304" y="80" fill="none" stroke="#000" font-weight="bold" font-size="80" font-family="Futura, futura, 'Futura-Bol', Futura-Bol, 'Trebuchet MS', Arial, sans-serif">
                    &amp;
                </text>
                <text class="logo-fill" x="392" y="64" font-weight="bold" font-size="72" font-family="Futura, futura, 'Futura-Bol', Futura-Bol, 'Trebuchet MS', Arial, sans-serif" letter-spacing="8">
                    MASON
                </text>
                <text class="logo-fill" x="496" y="96" font-weight="bold" font-size="20" font-family="Futura, futura, 'Futura-Bol', Futura-Bol, 'Trebuchet MS', Arial, sans-serif" letter-spacing="8">
                    STRAND
                </text>
                <text class="logo-fill-2" x="760" y="64" font-size="72" font-family="nickainleynormal">
                    Forever
                </text>
            </svg>
        </a>

        <a class="NamePlate__menu u-hide-desktop" href="#MainNavigation">Menu</a>
    </div>