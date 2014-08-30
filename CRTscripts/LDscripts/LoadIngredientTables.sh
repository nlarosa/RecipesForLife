# Load all tables related to ingredients

echo "*** Inserting into INGREDIENT ***"
sqlldr system/sm_nl_zl_4RFL control=LDingredient.ctl

echo "*** Inserting into INGREDIENTUNIT ***"
sqlldr system/sm_nl_zl_4RFL control=LDingredientUnit.ctl

echo "*** Inserting into GENERALUNIT ***"
sqlldr system/sm_nl_zl_4RFL control=LDgeneralUnit.ctl

echo "*** Inserting into ALTERNATIVEINGREDIENTNAME ***"
sqlldr system/sm_nl_zl_4RFL control=LDalternativeIngredientName.ctl

echo "*** Inserting into UNITCONVERSION ***"
sqlldr system/sm_nl_zl_4RFL control=LDunitConversion.ctl

echo "*** Inserting into PROXIMATE ***"
sqlldr system/sm_nl_zl_4RFL control=LDproximate.ctl
echo "*** Inserting into HASPROXIMATE ***"
sqlldr system/sm_nl_zl_4RFL control=LDhasProximate.ctl

echo "*** Inserting into VITAMIN ***"
sqlldr system/sm_nl_zl_4RFL control=LDvitamin.ctl
echo "*** Inserting into HASVITAMIN ***"
sqlldr system/sm_nl_zl_4RFL control=LDhasVitamin.ctl

echo "*** Inserting into MINERAL ***"
sqlldr system/sm_nl_zl_4RFL control=LDmineral.ctl
echo "*** Inserting into HASMINERAL ***"
sqlldr system/sm_nl_zl_4RFL control=LDhasMineral.ctl

echo "*** Inserting into LIPID ***"
sqlldr system/sm_nl_zl_4RFL control=LDlipid.ctl
echo "*** Inserting into HASLIPID ***"
sqlldr system/sm_nl_zl_4RFL control=LDhasLipid.ctl

echo "*** Inserting into OTHER ***"
sqlldr system/sm_nl_zl_4RFL control=LDother.ctl
echo "*** Inserting into HASOTHER ***"
sqlldr system/sm_nl_zl_4RFL control=LDhasOther.ctl






