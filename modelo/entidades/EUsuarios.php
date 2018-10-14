<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EUsuarios {

    Private $Nombre = "";
    Private $Apellido = "";
    Private $Correo = "";
    Private $Telefono = "";
    Private $Alias = "";
    Private $Contrasena = "";
    Private $FechaNacimiento = "";
    Private $Estatura = "";
    Private $Peso = "";
    Private $AceptaTerminos = "";
    
    



function getNombre() {
    return $this->Nombre;
}

 function getApellido() {
    return $this->Apellido;
}

 function getCorreo() {
    return $this->Correo;
}

 function getTelefono() {
    return $this->Telefono;
}

 function getAlias() {
    return $this->Alias;
}

 function getContrasena() {
    return $this->Contrasena;
}

 function getFechaNacimiento() {
    return $this->FechaNacimiento;
}

 function getEstatura() {
    return $this->Estatura;
}

 function getPeso() {
    return $this->Peso;
}

 function getAceptaTerminos() {
    return $this->AceptaTerminos;
}

 function setNombre($Nombre) {
    $this->Nombre = $Nombre;
}

 function setApellido($Apellido) {
    $this->Apellido = $Apellido;
}

 function setCorreo($Correo) {
    $this->Correo = $Correo;
}

 function setTelefono($Telefono) {
    $this->Telefono = $Telefono;
}

 function setAlias($Alias) {
    $this->Alias = $Alias;
}

 function setContrasena($Contrasena) {
    $this->Contrasena = $Contrasena;
}

 function setFechaNacimiento($FechaNacimiento) {
    $this->FechaNacimiento = $FechaNacimiento;
}

 function setEstatura($Estatura) {
    $this->Estatura = $Estatura;
}

 function setPeso($Peso) {
    $this->Peso = $Peso;
}

 function setAceptaTerminos($AceptaTerminos) {
    $this->AceptaTerminos = $AceptaTerminos;
}
}
