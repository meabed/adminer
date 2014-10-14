<?php
class AdminerLimit
{
    public function AdminerLimit()
    {

    }
    /** Process limit box in select
     * @return string expression to use in LIMIT, will be escaped
     */
    function selectLimitProcess() {
        return (isset($_GET["limit"]) ? $_GET["limit"] : "300");
    }
}