<?php global $filter; ?>

<div class="row">
    <div class="small-8 columns">
        <dl class="sub-nav">
            <dd class="active"><a href="/2014/schedule/">Day 1, Wednesday 23. April</a></dd>
            <dd><a href="/2014/schedule/thursday/">Day 2, Thursday 24. April</a></dd>
            <dd><a href="/2014/schedule/friday/">Day 3, Friday 25. April</a></dd>
        </dl>
    </div>
    <div class="small-3 columns">
        <strong>Legend</strong>
        <ul class="legend">
            <li class="research track">Research track</li>
            <li class="pedagogical track">Pedagogical track</li>
            <li class="policy track">Policy track</li>
            <li class="dissemination track">Dissemination track</li>
        </ul>
    </div>
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
            <th class="room-col">Glass Room</th>
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
            <td></td>
        </tr>
        <tr>
            <td class="schedule-time">09:00</td>
            <td class="introduction">Welcome and introduction</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="schedule-time">09:30</td>
            <td class="introduction"><?php
                    $filter = array(post_ids => array(714));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="break">
            <td class="schedule-time">10:30</td>
            <td colspan="7">Coffee break</td>
        </tr>
        <tr>
            <td class="schedule-time">11:00</td>
            <td class="keynote track"><?php
                    $filter = array(post_ids => array(567));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="gogn track"><?php
                    $filter = array(post_ids => array(720));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">12:00</td>
            <td colspan="7">Lunch</td>
        </tr>
        <tr>
            <td class="schedule-time">13:30</td>
            <td></td>
            <td class="research track"><?php
                $filter = array(tag_ids => array(28));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(27));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="policy track"><?php
                $filter = array(tag_ids => array(34));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="dissemination track"><?php
                    $filter = array(post_ids => array(533, 532, 531, 530));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="gogn track"><?php
                    $filter = array(post_ids => array(720));
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
            <td></td>
            <td class="research track"><?php
                $filter = array(tag_ids => array(29));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="pedagogical track"><?php
                $filter = array(tag_ids => array(26));
                get_template_part('partials/event_list_topic');
                ?>
            </td>
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
            <td class="dissemination track"><?php
                    $filter = array(post_ids => array(529, 528, 527));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
            <td class="gogn track"><?php
                    $filter = array(post_ids => array(720));
                    get_template_part('partials/event_list_topic');
                ?>
            </td>
        </tr>
        <tr>
            <td class="schedule-time">18:00</td>
            <td colspan="7">End of day 1</td>
        </tr>
        <tr>
            <td class="schedule-time">20:00</td>
            <td colspan="7">Program committe & invited speakers dinner</td>
        </tr>
    </tbody>
</table>

<br /><br /><br /><br /><br />