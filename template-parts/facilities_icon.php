<?php
if (isset($args['img'])) {
    $image_url = $args['img'];
}
?>


<div class="facilities-icon_frame">
    <?php if ($image_url): ?>
    <img class="facilities-icon_img" src="<?php echo $image_url; ?>" alt="icon frame" />
    <?php else: ?>
    <svg width="28" height="28" class="facilities-icon_img" viewBox="0 0 28 28" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_5093_391710)">
            <path d="M25.6665 8.16602L13.9998 19.8327L13.2707 19.1035M8.1665 13.9993L8.89567 14.7285L8.1665 13.9993Z"
                stroke="#689762" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M2.3335 13.9993L8.16683 19.8327L19.8335 8.16602" stroke="#689762" stroke-width="1.1"
                stroke-linecap="round" stroke-linejoin="round" />
        </g>
        <defs>
            <clipPath id="clip0_5093_391710">
                <rect width="28" height="28" fill="white" />
            </clipPath>
        </defs>
    </svg>
    <?php endif;?>

</div>