<?php

// app/models/Ticket.php

class Ticket extends Eloquent
{
	// Ticket __belongs_to__ User
    public function user()
    {
        return $this->belongsTo('User');
    }
}