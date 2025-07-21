<?php
class Statut
{
    private int $id;
    private string $libelle;

    public function __construct(int $id, string $libelle)
    {
        $this->id = $id;
        $this->libelle = $libelle;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public static function toObject(array $data): self
    {
        return new self(
            $data['id'] ?? 0,
            $data['libelle'] ?? ''
        );
    }
}