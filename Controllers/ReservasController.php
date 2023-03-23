<?php

require_once '../Models/Reserva.php';

class ReservasController {
  
  public function crear($datos) {
    $reserva = new Reserva($datos['nombre'],
     $datos['apellidos'], 
     $datos['fecha_llegada'], 
     $datos['fecha_salida'],
      $datos['num_personas'],
       $datos['num_habitaciones'], 
       $datos['tipo_habitacion'], 
       $datos['comentarios']);

    if ($reserva->crearReserva()) {
      return true;
    } else {
      return false;
    }
  }

  public function listar() {
    $reserva = new Reserva();

    return $reserva->listarReservas();
  }

  public function mostrarActualizar($id) {
    $reserva = new Reserva();

    $datos_reserva = $reserva->obtenerReserva($id);

    include_once '../Views/actualizar_reserva.php';
  }

  public function actualizar($id, $datos) {
    $reserva = new Reserva();

    if ($reserva->actualizarReserva($id, $datos['nombre'], $datos['apellidos'], $datos['fecha_llegada'], $datos['fecha_salida'], $datos['num_personas'], $datos['num_habitaciones'], $datos['tipo_habitacion'], $datos['comentarios'])) {
      return true;
    } else {
      return false;
    }
  }

  public function confirmarEliminar($id) {
    $reserva = new Reserva();

    $datos_reserva = $reserva->obtenerReserva($id);

    include_once '../Views/confirmar_eliminar.php';
  }

  public function eliminar($id) {
    $reserva = new Reserva();

    if ($reserva->eliminarReserva($id)) {
      return true;
    } else {
      return false;
    }
  }

}

?>
