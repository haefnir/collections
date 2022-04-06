<?php
/** Changes the nickname of the targeted id to the users entry
 *
 * @param int $id                   id of the point in the table
 * @param string|null $nickname     the new nickname
 * @param PDO $db                   the database
 * @return void
 */
function changeNicknameInDatabase(int $id, ?string $nickname, PDO $db): void {

        $hasNickname = $nickname==NULL ? 0 : 1;

        $query= $db->prepare(
        "UPDATE `user-pokemon`
        SET `nickname` = :nickname,
            `hasNickname` = :hasNickname
        WHERE `id` = :id
        LIMIT 1;");
        $query->bindParam(':nickname', $nickname);
        $query->bindParam(':hasNickname', $hasNickname);
        $query->bindParam(':id', $id);
        $query->execute();

}