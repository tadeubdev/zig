<?php

namespace System\CommandLine;

class Help
{
  public function __construct()
  {
    echo "-----------------------------------\n";
    echo "       Command Line [beta]   \n";
    echo "-----------------------------------\n\n";
    echo "• help: exibe estas informações \n\n";
    echo "• create [command] \n";
    echo "  • controller [ControllerName]: cria um controller \n";
    echo "  • migration  [migration_name]: cria uma migration \n\n";
    echo "• migrate: migra banco de dados \n";
    echo "• dump   : popula banco de dados \n";
  }
}
