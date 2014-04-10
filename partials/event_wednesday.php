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
            <td class="schedule-time">08:00</td>
            <td class="registration">Registration</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="schedule-time">09:00</td>
            <td class="openingupslovenia track"><?php
                    $filter = array(post_ids => array(736));
                    get_template_part('partials/event_list_topic');
                ?>
                <p class="names">
                    Larry Cooperman<br />
                    Colin de la Higuera
                </p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="schedule-time">09:10</td>
            <td class="openingupslovenia track"><?php
                    $filter = array(post_ids => array(714));
                    get_template_part('partials/event_list_topic');
                ?>
                <p class="names">
                    Jernej Pikalo<br />
                    Androulla Vassiliou<br />
                    Mitja Jermol<br />
                    Fred Mulder<br />
                </p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="break">
            <td class="schedule-time">10:30</td>
            <td colspan="5">Coffee break</td>
        </tr>
        <tr>
            <td class="schedule-time">11:00</td>
            <td class="openingupslovenia track"><?php
                    $filter = array(post_ids => array(744));
                    get_template_part('partials/event_list_topic');
                ?>
                <p class="names">
                    Zoran Stančič
                </p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td class=""><?php
                    $filter = array(post_ids => array(743));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">11:15</td>
            <td class="keynote track">
                <?php
                    $filter = array(post_ids => array(567));
                    get_template_part('partials/event_list_topic');
                ?>
                <p class="names">
                    Divina Frau-Meigs
                </p>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="schedule-time">12:00</td>
            <td colspan="5">Lunch</td>
        </tr>
        <tr>
            <td class="schedule-time">13:30</td>
            <td class="research track"><?php
                $filter = array(tag_ids => array(28));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="policy track"><?php
                $filter = array(tag_ids => array(34));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(27));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="dissemination track">
                <?php
                    $filter = array(post_ids => array(533, 532, 531, 522));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="gogn track">
                <a class="topic-title" href="/2014/ai1ec_event/go-gn-research-track/">GO-GN Research Track</a>
                <?php
                    $filter = array(post_ids => array(778, 779, 780, 781));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">15:30</td>
            <td colspan="6">Coffee break</td>
        </tr>
        <tr>
            <td class="schedule-time">16:00</td>
            <td class="policy track">
                <?php
                    $filter = array(tag_ids => array(35));
                    get_template_part('partials/event_list_topic');
                ?>
                <div class="poster track">
                    <?php
                        $filter = array(post_ids => array(577));
                        get_template_part('partials/event_list_topic');
                    ?>
                </div>
            </td>
            <td class="research track">
                <?php
                    $filter = array(tag_ids => array(29));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(26));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="dissemination track">
                <?php
                    $filter = array(post_ids => array(525, 528, 527));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="gogn track">
                <a class="topic-title" href="/2014/ai1ec_event/go-gn-research-track/">GO-GN Research Track</a>
                <?php
                    $filter = array(post_ids => array(782, 783, 784, 785));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">18:00</td>
            <td colspan="6">End of day 1</td>
        </tr>
        <tr>
            <td class="schedule-time">20:00</td>
            <td colspan="6">Program committe & invited speakers dinner</td>
        </tr>
    </tbody>
</table>

<br /><br /><br /><br /><br />