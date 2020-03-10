package com.lab1.problems;

/**
Copyright (c) D.B. - 2020 Java classes (Faculty of Computer Science Iasi)
 **/


public class Main {

    public static void main(String[] args) {

        // create Depots

        Depot d1 = new Depot("D1");
        Depot d2 = new Depot("D2");


        // create Vehicles to use

        Vehicle v1 = new Vehicle("V1", Vehicle.VehicleType.CAR);
        Vehicle v2 = new Vehicle("V2", Vehicle.VehicleType.DRONE);
        Vehicle v3 = new Vehicle("V3", Vehicle.VehicleType.TRUCK);

        // assign vehicle to depot (or depot with vehicles)

        d1.setVehicles(v1,v2);
        d2.setVehicles(v3);

        // create Clients

        Client c1 = new Client("C1",1);
        Client c2 = new Client("C2",1);
        Client c3 = new Client("C3",2);
        Client c4 = new Client("C4",2);
        Client c5 = new Client("C5",3);

        // problem


        Problem p = new Problem();
        p.setClients(c1); p.setClients(c2); p.setClients(c3); p.setClients(c4); p.setClients(c5);

        p.afisareClienti();

        p.setDepots(d1,d2);
        System.out.println(p.toString());
    }
}
