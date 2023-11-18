<?php
interface IAcpmcDAO{
    public function asignar(ACPMC $ACPMC);
    public function getlistacurso($idcurso, $idpreceptor, $idmodalidad, $idciclo);
    
}