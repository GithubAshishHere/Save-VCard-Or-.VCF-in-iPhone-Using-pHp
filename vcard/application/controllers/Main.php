<?php
use JeroenDesloovere\VCard\VCard;


class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('main_index');
	}

	public function download_vcard()
    {
        die('yes');
        $vcard = new VCard();
        $lastname = $this->input->post('lastname');
        $firstname = $this->input->post('firstname');
        $additional = '';
        $prefix = '';
        $suffix = '';

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

        // add work data
        $vcard->addCompany('Sample Company');
        $vcard->addJobtitle('Web Developer');
        $vcard->addRole('Data Protection Officer');
        $vcard->addEmail('info@jeroendesloovere.be');
        $vcard->addPhoneNumber(1234121212, 'PREF;WORK');
        $vcard->addPhoneNumber(123456789, 'WORK');
        $vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
        $vcard->addLabel('street, worktown, workpostcode Belgium');
        $vcard->addURL('http://www.jeroendesloovere.be');
        $vcard->setFilename('sample-vcard');
        $vcard->download();
    }
}
