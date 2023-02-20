<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'pasien_m';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id', 
										'kd_profile', 
										'status_enable', 
										'kodeexternal', 
										'namaexternal', 
										'norec', 
										'reportdisplay', 
										'objectagamafk', 
										'objectgolongandarahfk', 
										'objectjeniskelaminfk', 
										'namapasien', 
										'nocm', 
										'objectpekerjaanfk', 
										'objectpendidikanfk', 
										'qpasien', 
										'objectstatusperkawinanfk', 
										'tgldaftar', 
										'tgllahir', 
										'objecttitlefk', 
										'namaibu', 
										'notelepon', 
										'noidentitas', 
										'tglmeninggal', 
										'noaditional', 
										'paspor', 
										'objectkebangsaanfk', 
										'objectnegarafk', 
										'objectgnegarafk', 
										'namadepan', 
										'namabelakang', 
										'dokumenrekammedis', 
										'namaayah', 
										'namasuamiistri', 
										'noasuransilain', 
										'nobpjs', 
										'nohp', 
										'tempatlahir', 
										'jamlahir', 
										'namakeluarga', 
										'penanggungjawab', 
										'hubungankeluargapj', 
										'pekerjaanpenanggungjawab', 
										'ktppenanggungjawab', 
										'alamatrmh'
									];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [ 
		'title' => 'required|alpha_numeric_space|min_length[3]|max_length[255]|is_unique[posts.title,id,{id}]',
		'content' => 'required',
		'status' => 'required'
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
