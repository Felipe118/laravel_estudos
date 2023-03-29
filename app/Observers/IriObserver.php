<?php

namespace App\Observers;

use App\Models\LevantamentoIri;

class IriObserver
{
    public $afterCommit = true;


    /**
     * Handle the LevantamentoIri "created" event.
     */
    public function created(LevantamentoIri $levantamentoIri): void
    {
        
        $levantamentoIri->geometrico = $levantamentoIri->latitude . ' '.$levantamentoIri->longitude;
        $levantamentoIri->save();
    }

    /**
     * Handle the LevantamentoIri "updated" event.
     */
    public function updated(LevantamentoIri $levantamentoIri): void
    {
        //
    }

    /**
     * Handle the LevantamentoIri "deleted" event.
     */
    public function deleted(LevantamentoIri $levantamentoIri): void
    {
        //
    }

    /**
     * Handle the LevantamentoIri "restored" event.
     */
    public function restored(LevantamentoIri $levantamentoIri): void
    {
       
    }

    /**
     * Handle the LevantamentoIri "force deleted" event.
     */
    public function forceDeleted(LevantamentoIri $levantamentoIri): void
    {
        //
    }
}
