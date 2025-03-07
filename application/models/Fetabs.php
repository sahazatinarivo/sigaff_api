<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetabs extends CI_Model {

	private $table = "t_direction";

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getEpp() {
        $sql = $this->db->from($this->table)
        				->where('entite_drh',1)
        				->order_by('RAND()');
        
        return $sql->get()->result();
	}
	
	public function getCeg() {
        $sql = $this->db->from($this->table)
        				->where('entite_drh',2)
        				->order_by('RAND()');

        return $sql->get()->result();
	}
	
	public function getLycee() {
        $sql = $this->db->from($this->table)
        				->where('entite_drh',3)
        				->order_by('RAND()');

        return $sql->get()->result();
	}

    public function getTickets( $id_dir )
    {
        $sQls = "SELECT 
                    ds.id as id_doss,
                    ds.ref,
                    ds.cle,
                    ds.libelle as nom_doss,
                    ds.desc as description_doss,
                    ds.situation as situation,
                    ds.date_ct as date_save,
                    ds.date_deadline as deadline,
                    dr.code_direction as abrev_dir,
                    ds.bnormal,
                    ds.bnew,
                    ds.udir,
                    ds.bstandby,
                    ds.bcritic
                 FROM sdos__tickets ds
                 INNER JOIN sdos__participant pr ON ds.id = pr.id_dossier
                 INNER JOIN t_direction dr ON dr.code_direction = ds.udir
                 WHERE (pr.id_dir = $id_dir OR ds.udir= $id_dir) AND ds.is_arc = 0 AND ds.is_del = 0
                 AND (ds.date_deadline = '0000-00-00' OR ds.date_deadline >= '" . date('Y-m-d') . "')
                 GROUP BY pr.id_dossier";

        $q = $this->db->query($sQls);
        return $q->result();
    }

	public function getDossierById( $ids ){
		$sQl = $this->db->select('
					ds.id as id_doss, ds.ref, ds.cle,
					ds.libelle as nom_doss,
					ds.desc as description_doss,
					ds.date_ct as date_save,
					ds.date_deadline as deadline,
					dr.code_direction as abrev_dir,
                                        ds.bnormal,
                                        ds.bnew,
                                        ds.bstandby,
                                        ds.bcritic
					')
					->from('sdos__tickets ds')
    				->join('t_direction dr','ds.udir=dr.code_direction')
    				->where('ds.id',$ids);
                
        return $sQl->get()->result();
	}
    
}
