<?php

class Computer implements Bluetooth, Wifi, GraphicCard, VoiceCommands, HDMIInput // And so on...
    // For me, this is a example of KISS, because you are overcomplicating the code with all this interfaces.
    // We know that maybe some types of computers doest have a graphic card, or accepts Wifi connection, but we really need all this interfaces?
    // Like, if you need make a new interface every time that you need a new feature, this will end in a pile of interfaces and this is kinda confusing.
    // So, for me this is an example of a no KISS oriented code, because in the end you are just overcomplicate all the thing.
{

    public function startBluetoothConnection()
    {
        // TODO: Implement startBluetoothConnection() method.
    }

    public function endBluetoothConnection()
    {
        // TODO: Implement endBluetoothConnection() method.
    }

    public function improveVideoProcessing()
    {
        // TODO: Implement improveVideoProcessing() method.
    }

    public function passAudioByHDMICable()
    {
        // TODO: Implement passAudioByHDMICable() method.
    }

    public function passVideoByHDMICable()
    {
        // TODO: Implement passVideoByHDMICable() method.
    }

    public function listenStupidHumanToTalk()
    {
        // TODO: Implement listenStupidHumanToTalk() method.
    }

    public function obeyTheStupidHumanNeeds()
    {
        // TODO: Implement obeyTheStupidHumanNeeds() method.
    }

    public function startWifiConnection()
    {
        // TODO: Implement startWifiConnection() method.
    }

    public function endWifiConnection()
    {
        // TODO: Implement endWifiConnection() method.
    }
}