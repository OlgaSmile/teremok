<?php
if (isset($args['title'])) {
    $title = $args['title'];
}
?>
<svg style="display: none;">
  <symbol id="tree" viewBox="0 0 18 32">
    <path fill="none" stroke="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
      stroke-width="1.1707" d="M8.723 32v-31.396"></path>
    <path fill="none" stroke="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
      stroke-width="1.1707"
      d="M8.723 0.835c-0.57 2.31-2.548 6.946-5.901 7.014M8.723 10.243c-0.656 2.166-3.096 6.363-7.611 5.815M8.723 20.505c-1.596 2.423-5.576 6.995-8.723 5.901">
    </path>
    <path fill="none" stroke="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
      stroke-width="1.1707"
      d="M8.723 0.835c0.57 2.31 2.548 6.946 5.901 7.014M8.723 10.243c0.656 2.166 3.096 6.363 7.611 5.815M8.723 20.505c1.596 2.423 5.576 6.995 8.723 5.901">
    </path>
  </symbol>
  <symbol id="big-tree" viewBox="0 0 18 32">
    <path fill="none" stroke="" style="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
      stroke-width="0.8276" d="M9.22 32v-31.69"></path>
    <path fill="none" stroke="" style="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
      stroke-width="0.8276"
      d="M9.22 0.543c-0.575 2.331-2.572 7.011-5.956 7.079M9.22 10.039c-0.662 2.187-3.125 6.422-7.682 5.87M9.22 20.397c-1.611 2.446-5.628 7.061-8.805 5.956">
    </path>
    <path fill="none" stroke="" style="" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4"
      stroke-width="0.8276"
      d="M9.22 0.543c0.575 2.331 2.572 7.011 5.956 7.079M9.22 10.039c0.662 2.187 3.125 6.422 7.682 5.87M9.22 20.397c1.611 2.446 5.628 7.061 8.805 5.956">
    </path>
  </symbol>
</svg>

<div class="section_title">
  <div class="section_title--icon_wrap">
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="#tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon big">
        <use href="#big-tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="#tree">
        </use>
      </svg>
    </div>
  </div>
  <h2 class="section_title--text"><?php echo $title ?></h2>
  <div class="section_title--icon_wrap">
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="#tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon big">
        <use href="#big-tree">
        </use>
      </svg>
    </div>
    <div class="anim-items">
      <svg class="section_title--icon small">
        <use href="#tree">
        </use>
      </svg>
    </div>
  </div>
</div>