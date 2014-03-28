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
            <th class="room-col">Silver Room</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="schedule-time">9:00</td>
            <td class="keynote track"><?php
                    $filter = array(post_ids => array(565));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="schedule-time">10:00</td>
            <td colspan="6">Coffee break</td>
        </tr>
        <tr>
            <td class="schedule-time">10:30</td>
            <td></td>
            <td class="research track"><?php
                $filter = array(tag_ids => array(30));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(25));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="policy track"><?php
                $filter = array(tag_ids => array(36));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="dissemination track"><?php
                    $filter = array(post_ids => array(526, 529));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">12:00</td>
            <td colspan="6">Lunch / <strong>Poster session</strong></td>
        </tr>
        <tr>
        	<td class="schedule-time">13:30</td>
        	<td style="height:100px;">OCWC Meeting</td>
        	<td></td>
        	<td></td>
        	<td></td>
            <td rowspan="2" class="dissemination track"><?php
                    $filter = array(post_ids => array(524, 523, 530));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
        	<td class="schedule-time">14:30</td>
        	<td><?php 
                    $filter = array(post_ids => array(715));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="research track"><?php
                $filter = array(tag_ids => array(31));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(24));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="policy track"><?php
                $filter = array(tag_ids => array(37));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">15:30</td>
            <td colspan="7">Coffee break</td>
        </tr>
        <tr>
        	<td class="schedule-time">16:00</td>
            <td class="policy track"><?php
                $filter = array(tag_ids => array(38));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="research track"><?php
                $filter = array(tag_ids => array(32));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(23));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td></td>
            <td rowspan="2" class="dissemination track"><?php
                    $filter = array(post_ids => array(512, 521, 520, 519));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">18:00</td>
            <td colspan="7">End of day 2</td>
        </tr>
        <tr>
            <td class="schedule-time">20:00</td>
            <td colspan="7"><?php 
                    $filter = array(post_ids => array(716));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>        
    </tbody>
</table>
