<?php
add_filter('wp_unique_post_slug', 'creating_post_slug', 9999, 4);
function creating_post_slug($slug, $post_ID, $post_status, $post_type)
{
    $cyr_slug = trim(urldecode($slug));
    preg_match('|[а-яеёіїєА-ЯЕЁІЇЄ]+|iu', $cyr_slug, $match);
    if (empty($match)) {
        return $slug;
    }
    $cyr = [
        'а',
        'б',
        'в',
        'г',
        'д',
        'е',
        'ё',
        'ж',
        'з',
        'и',
        'й',
        'к',
        'л',
        'м',
        'н',
        'о',
        'п',
        'р',
        'с',
        'т',
        'у',
        'ф',
        'х',
        'ц',
        'ч',
        'ш',
        'щ',
        'ы',
        'э',
        'ю',
        'я',
        'і',
        'ї',
        'є'
    ];
    $eng = [
        'a',
        'b',
        'v',
        'g',
        'd',
        'e',
        'yo',
        'zh',
        'z',
        'y',
        'yi',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'r',
        's',
        't',
        'u',
        'f',
        'h',
        'ts',
        'ch',
        'sh',
        'sch',
        'y',
        'e',
        'yu',
        'ya',
        'i',
        'yi',
        'ye'
    ];
    $new_slug = str_replace($cyr, $eng, $cyr_slug);
    $new_slug2 = preg_replace('|[а-яеёіїєА-ЯЕЁІЇЄ]|iu', '-', $new_slug);
    return $new_slug2;
}