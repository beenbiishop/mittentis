<?php

namespace App;

enum SpektrixSeatingPlanType: string {

    case Group = 'group';
    case Reserved = 'reserved';
    case Unreserved = 'unreserved';
}
