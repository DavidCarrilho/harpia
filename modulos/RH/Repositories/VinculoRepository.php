<?php


namespace Modulos\RH\Repositories;


use Modulos\Core\Repository\BaseRepository;
use Modulos\RH\Models\Vinculo;

class VinculoRepository extends BaseRepository
{
    public function __construct(Vinculo $vinculo)
    {
        $this->model = $vinculo;
    }
}