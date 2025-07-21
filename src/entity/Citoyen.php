<?php


class Citoyen
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $cni;
    private string $datenaiss;
    private string $lieunaiss;


    public function __construct($id,$nom,$prenom,$cni,$datenaiss,$lieunaiss)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->cni=$cni;
        $this->datenaiss=$datenaiss;
        $this->lieunaiss=$lieunaiss;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getCni(): string
    {
        return $this->cni;
    }

    public function getDatenaiss(): string
    {
        return $this->datenaiss;
    }

    public function getLieunaiss(): string
    {
        return $this->lieunaiss;
    }


    public static function toObject(array $data): self
    {
        return new self(
            $data['id'] ?? 0,
            $data['nom'] ?? '',
            $data['prenom'] ?? '',
            $data['cni'] ?? '',
            $data['datenaiss'] ?? '',
            $data['lieunaiss'] ?? ''
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'cni' => $this->cni,
            'datenaiss' => $this->datenaiss,
            'lieunaiss' => $this->lieunaiss
        ];
    }
}