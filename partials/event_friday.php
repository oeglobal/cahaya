<?php global $filter; ?>

<div class="row">
    <?php get_template_part('partials/event_days'); ?>
    <?php get_template_part('partials/event_legend'); ?>
</div>

<table class="custom-schedule">
    <thead>
        <tr>
            <th class="time-col"></th>
            <th class="room-col">Union hall</th>
            <th class="room-col">White Room&nbsp;1</th>
            <th class="room-col">White Room&nbsp;2</th>
            <th class="room-col">White Room&nbsp;3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="schedule-time">9:00</td>
            <td class="keynote track"><?php
                    $filter = array(post_ids => array(568));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="break">
            <td class="schedule-time">10:00</td>
            <td colspan="7">Coffee break</td>
        </tr>
        <tr>
            <td class="schedule-time">10:30</td>
            <td class="policy track"><?php
                $filter = array(tag_ids => array(39));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="research track"><?php
                $filter = array(tag_ids => array(33));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(22));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="dissemination track"><?php
                    $filter = array(post_ids => array(518, 517));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">12:00</td>
            <td colspan="6">Lunch</strong></td>
        </tr>
        <tr>
            <td class="schedule-time">13:30</td>
            <td class="dissemination track"><?php
                    $filter = array(post_ids => array(515, 513, 540, 868));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="policy track"><?php
                $filter = array(post_ids => array(771));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(21));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="dissemination track"><?php
                    $filter = array(post_ids => array(516, 514, 871));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr class="break">
            <td class="schedule-time">15:30</td>
            <td colspan="7">Coffee break / Closing</td>
        </tr>
        <tr>
            <td class="schedule-time">16:00</td>
            <td colspan="7">End of day 3</td>
        </tr>
    </tbody>
</table>