<?php

class Journal
{
    private int $id;
    private string $date;
    private string $heure;
    private string $ipadresse;
    private string $loalisation;
    private string $statut;
    private string $code;
    private string $citoyencnirecherche;

    public function __construct(
        int $id,
        string $date,
        string $heure,
        string $ipadresse,
        string $loalisation,
        string $statut,
        string $code,
        string $citoyencnirecherche
    ) {
        $this->id = $id;
        $this->date = $date;
        $this->heure = $heure;
        $this->ipadresse = $ipadresse;
        $this->loalisation = $loalisation;
        $this->statut = $statut;
        $this->code = $code;
        $this->citoyencnirecherche = $citoyencnirecherche;
    }

    public function getId(): int
    {
        return $this->id;
    }   
    public function getDate(): string
    {
        return $this->date;
    }
    public function getHeure(): string
    {
        return $this->heure;
    }
    public function getIpadresse(): string
    {
        return $this->ipadresse;

    }
    public function getLoalisation(): string
    {
        return $this->loalisation;
    }
    public function getStatut(): string
    {
        return $this->statut;
    }
    public function getCode(): string
    {
        return $this->code;
    }
    public function getCitoyencnirecherche(): string
    {
        return $this->citoyencnirecherche;
    }


    public static function toObject(array $data): self
    {
        return new self(
            $data['id'] ?? 0,
            $data['date'] ?? '',
            $data['heure'] ?? '',
            $data['ipadresse'] ?? '',
            $data['loalisation'] ?? '',
            $data['statut'] ?? '',
            $data['code'] ?? '',
            $data['citoyencnirecherche'] ?? ''
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'heure' => $this->heure,
            'ipadresse' => $this->ipadresse,
            'loalisation' => $this->loalisation,
            'statut' => $this->statut,
            'code' => $this->code,
            'citoyencnirecherche' => $this->citoyencnirecherche
        ];
    }
}