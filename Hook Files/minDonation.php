<?php
class minDonation extends public_nexus_payments_donate
{
    public function doExecute( ipsRegistry $registry )
    {
        if($this->request['amount'] < ipsRegistry::$settings['nexus_minimum_donation']){
            $this->registry->output->showError('Minimum donation amount is at least '.ipsRegistry::$settings['nexus_minimum_donation'].' '.ipsRegistry::$settings['nexus_currency'], '10X' );
            return;
        }
        parent::doExecute($registry);
    }         
}
?>