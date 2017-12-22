<?php
// **********************************************************************
//
// Copyright (c) 2003-2017 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.7.0
//
// <auto-generated>
//
// Generated from file `IProfitCalculator.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Cryosoft.php';
}

namespace Cryosoft\ProfitCalculator
{
    global $Cryosoft_ProfitCalculator__t_IProfitCalculator;
    global $Cryosoft_ProfitCalculator__t_IProfitCalculatorPrx;

    class IProfitCalculatorPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::Cryosoft::ProfitCalculator::IProfitCalculator', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Cryosoft::ProfitCalculator::IProfitCalculator', $facet);
        }

        public static function ice_staticId()
        {
            return '::Cryosoft::ProfitCalculator::IProfitCalculator';
        }
    }

    $Cryosoft_ProfitCalculator__t_IProfitCalculator = IcePHP_defineClass('::Cryosoft::ProfitCalculator::IProfitCalculator', '\\Cryosoft\\ProfitCalculator\\IProfitCalculator', -1, false, true, $Ice__t_Value, null);

    $Cryosoft_ProfitCalculator__t_IProfitCalculatorPrx = IcePHP_defineProxy('::Cryosoft::ProfitCalculator::IProfitCalculator', $Ice__t_ObjectPrx, null);

    IcePHP_defineOperation($Cryosoft_ProfitCalculator__t_IProfitCalculatorPrx, 'ProfitCalculation', 0, 0, 0, array(array($Cryosoft__t_stSKConf), array($IcePHP__t_int)), null, array($IcePHP__t_long), null);
}
?>