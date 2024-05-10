<?php

interface IAbstractSedan
{
public function FunctionWithSedan(): string;

public function AnotherFunctionWithSedan(IAbstractCombi $collaborator): string;
}