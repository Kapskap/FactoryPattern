<?php

interface IAbstractFactory
{
    public  function CreateCabriolet();
    public  function CreateCombi();
    public  function CreateHatchback();
    public  function CreateSedan();
}
