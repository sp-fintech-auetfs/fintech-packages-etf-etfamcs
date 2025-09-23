<?php

namespace Apps\Fintech\Packages\Etf\Amcs;

use Apps\Fintech\Packages\Etf\Amcs\Model\AppsFintechEtfAmcs;
use System\Base\BasePackage;

class EtfAmcs extends BasePackage
{
    protected $modelToUse = AppsFintechEtfAmcs::class;

    protected $packageName = 'etfamcs';

    public $etfamcs;

    public function getEtfAmcByName($name)
    {
        if ($this->config->databasetype === 'db') {
            $conditions =
                [
                    'conditions'    => 'name = :name:',
                    'bind'          =>
                        [
                            'name'  => $name
                        ]
                ];

            $etfamc = $this->getByParams($conditions);
        } else {
            $this->ffStore = $this->ff->store($this->ffStoreToUse);

            $this->ffStore->setReadIndex(false);

            $etfamc = $this->ffStore->findBy(['name', '=', $name]);
        }

        if ($etfamc && count($etfamc) > 0) {
            return $etfamc[0];
        }

        return false;
    }

    public function addEtfAmcs($data)
    {
        $this->ffStore = $this->ff->store($this->ffStoreToUse);

        $this->ffStore->setReadIndex(false);

        return $this->add($data);
    }

    public function updateEtfAmcs($data)
    {
        $this->ffStore = $this->ff->store($this->ffStoreToUse);

        $this->ffStore->setReadIndex(false);

        if ($data['turn_around_time'] === '') {
            $data['turn_around_time'] = null;
        }

        return $this->update($data);
    }

    public function removeEtfAmcs($data)
    {
        //
    }
}