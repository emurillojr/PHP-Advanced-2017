<?php

/**
 *
 * @author Ernesto Murillo
 */
interface IRestModel {

    function getAll();

    function get($id);

    function post($serverData);

    function put($serverData);

    function delete($serverData);
}
