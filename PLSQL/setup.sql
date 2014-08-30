set serveroutput on;

drop type conversionStep;

create type conversionStep as object
(
        generalUnitID number,
        multiple number
);
/

@RFLpack
@RFLpackbody
quit
