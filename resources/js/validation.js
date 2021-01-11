import { Validator } from 'vee-validate';

const dict = {
    custom: {
        sector: {
            required: 'El campo Sector en el que ope es requerido.',
        },
        email: {
            required: 'El campo Correo electrónico de contacto es requerido.',
            email: 'El formato del Correo electrónico de contacto no es correcto.',
        },
        averageTurnover: {
            required: 'El campo Facturación media de los últimos 3 años (en €) es requerido.',
        },
        netIncome: {
            required: 'El campo EBITDA media de los últimos 3 años (en €) es requerido.',
        },
        netResult: {
            required: 'El campo Resultado neto medio de los últimos 3 años (en €) es requerido.',
        },
        netFinancialDebt: {
            required: 'El campo Deuda financiera neta total (en €) es requerido.',
        },
        fixedAssets: {
            required: 'El campo Total activo inmovilizado (en €) es requerido.',
        },
        largestShareholderPercentage: {
            required: 'El campo ¿Porcentaje de la empresa del mayor accionista? es requerido.',
        },
        largestCustomerBilling: {
            required: 'El campo Porcentaje de facturación que viene del mayor cliente es requerido.',
        },
    }
};

Validator.localize('en', dict);