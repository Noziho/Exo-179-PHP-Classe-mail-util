<?php
class mail {
   public $sujet;
   public $corpsMessage;
   public $destinataire;

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet): void
    {
        $this->sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getCorpsMessage()
    {
        return $this->corpsMessage;
    }

    /**
     * @param mixed $corpsMessage
     */
    public function setCorpsMessage($corpsMessage): void
    {
        $this->corpsMessage = $corpsMessage;
    }

    /**
     * @return mixed
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * @param mixed $destinataire
     */
    public function setDestinataire($destinataire): void
    {
        $this->destinataire = $destinataire;
    }
    public function writingMail ($destinataireParam, $objet, $message) :void {
        $this->setDestinataire($destinataireParam);
        $this->setSujet($objet);
        $this->setCorpsMessage($message);
    }

    public function sendMail () :void {
        mail($this->getDestinataire(), $this->getSujet(), $this->getCorpsMessage());
    }
}