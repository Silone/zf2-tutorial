<?php
namespace Album\Model;
use Zend\Db\Table\AbstractTable;

class AlbumTable extends AbstractTable
{

    protected $_name = 'album';

    public function getAlbum( $id )
    {
        $id = (int) $id;
        $row = $this->fetchRow('id = ' . $id);
        if ( !$row )
        {
            throw new \Exception('Could not find row ' . $id);
        }
        return $row->toArray();
    }

    public function addAlbum( $artist, $title )
    {
        $data = array(
            'artist' => $artist, 'title' => $title
        );
        $this->insert($data);
    }

    public function updateAlbum( $id, $artist, $title )
    {
        $id = (int) $id;
        $data = array(
            'artist' => $artist, 'title' => $title
        );
        $this->update($data, 'id = ' . $id);
    }

    public function deleteAlbum( $id )
    {
        $id = (int) $id;
        $this->delete('id = ' . $id);
    }
}
